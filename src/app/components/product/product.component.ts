import { Component, Input } from '@angular/core';
import { Product } from 'src/app/model';
import { CartService } from 'src/app/services';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
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
