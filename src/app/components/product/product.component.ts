import { Component, Input } from '@angular/core';
import { Product } from '../../model';
import { CartService } from '../../services';

@Component({
  standalone: false,
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
