import { Component, Input } from '@angular/core';
import { Product } from '../../model';
import { CartService } from '../../services';
import { NgIf, NgFor, CurrencyPipe } from '@angular/common';
import { MedalComponent } from '../medal/medal.component';
import { FormsModule } from '@angular/forms';

@Component({
    selector: 'app-product',
    templateUrl: './product.component.html',
    styleUrls: ['./product.component.css'],
    imports: [NgIf, NgFor, MedalComponent, FormsModule, CurrencyPipe]
})
export class ProductComponent {

  @Input()
  product!: Product;
  quantity = 1;
  constructor(private cartService: CartService) { }

  addToCart(): void {
    this.cartService.setProductQuantity(this.product.id, this.quantity + this.cartService.getProductQuantity(this.product.id));
  }
}
