import { Component, OnInit } from '@angular/core';
import { Observable, combineLatest } from 'rxjs';
import { map } from 'rxjs/operators';
import { Product } from '../../model';
import { CartService, ProductService, OrderService } from '../../services';
import { NgIf, NgFor, AsyncPipe, CurrencyPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
    selector: 'app-cart',
    templateUrl: './cart.component.html',
    styleUrls: ['./cart.component.css'],
    imports: [NgIf, NgFor, FormsModule, AsyncPipe, CurrencyPipe]
})
export class CartComponent implements OnInit {

  cart$!: Observable<[Product, number][]>;

  get lastName(): string {
    return sessionStorage.getItem('order_lastName') || '';
  }

  set lastName(lastName: string) {
    sessionStorage.setItem('order_lastName', lastName);
  }

  get firstName(): string {
    return sessionStorage.getItem('order_firstName') || '';
  }

  set firstName(firstName: string) {
    sessionStorage.setItem('order_firstName', firstName);
  }

  get street(): string {
    return sessionStorage.getItem('order_street') || '';
  }

  set street(street: string) {
    sessionStorage.setItem('order_street', street);
  }

  get zipCode(): string {
    return sessionStorage.getItem('order_zipCode') || '';
  }

  set zipCode(zipCode: string) {
    sessionStorage.setItem('order_zipCode', zipCode);
  }

  get city(): string {
    return sessionStorage.getItem('order_city') || '';
  }

  set city(city: string) {
    sessionStorage.setItem('order_city', city);
  }

  get email(): string {
    return sessionStorage.getItem('order_email') || '';
  }

  set email(email: string) {
    sessionStorage.setItem('order_email', email);
  }

  get phone(): string {
    return sessionStorage.getItem('order_phone') || '';
  }

  set phone(phone: string) {
    sessionStorage.setItem('order_phone', phone);
  }

  constructor(private cartService: CartService, private productService: ProductService, private orderService: OrderService) { }

  ngOnInit(): void {
    this.cart$ = combineLatest([this.productService.getProducts(), this.cartService.subscribe()])
      .pipe(
        map(([products, cart]) => products.map(product => [product, cart[product.id] || 0] as [Product, number])
          .filter(element => element[1]))
      );
  }

  computeTotal(cart: [Product, number][]): number {
    return cart.reduce((total, product) => total + product[0].price * product[1], 0);
  }

  delete(product: Product): void {
    this.cartService.setProductQuantity(product.id, 0);
  }


  order(cart: [Product, number][]): void {
    this.orderService.order({
      lastName: this.lastName,
      firstName: this.firstName,
      street: this.street,
      zipCode: this.zipCode,
      city: this.city,
      email: this.email,
      phone: this.phone,
      cart: cart.reduce((result, [product, quantity]) => {
        result[product.id] = quantity;
        return result;
      }, {} as {[id: string]: number})
    }).subscribe(_ => {
      cart.forEach(([product, __]) => this.delete(product));
      alert('Commande expédiée');
    });
  }
  canOrder(cart: [Product, number][]): boolean {
    return !!((cart.reduce((total, product) => total + product[1], 0) > 0)
      && this.lastName
      && this.firstName
      && this.street
      && this.zipCode
      && this.city
      && this.email);
  }

}
