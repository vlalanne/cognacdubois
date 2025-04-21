import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs';
import { ProductService } from '../../services';
import { Product } from '../../model';
import { NgFor, AsyncPipe } from '@angular/common';
import { ProductComponent } from '../product/product.component';

@Component({
    selector: 'app-products',
    templateUrl: './products.component.html',
    styleUrls: ['./products.component.css'],
    imports: [NgFor, ProductComponent, AsyncPipe]
})
export class ProductsComponent implements OnInit {

  products$!: Observable<Product[]>;

  constructor(private productService: ProductService) { }

  ngOnInit(): void {
    this.products$ = this.productService.getProducts();
  }

}
