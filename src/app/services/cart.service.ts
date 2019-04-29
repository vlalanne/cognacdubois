import { Injectable } from '@angular/core';
import { Observable, BehaviorSubject, } from 'rxjs';
import { map, tap } from 'rxjs/operators';
import { Cart } from '../model';
import { ProductService } from './product.service';

@Injectable({
  providedIn: 'root'
})
export class CartService {

  private storage: Storage;
  private _cart: BehaviorSubject<number> = new BehaviorSubject(0);

  constructor(private productService: ProductService) {
    this.storage = sessionStorage;
  }

  setProductQuantity(id: string, quantity: number): void {
    try {
      this.storage.setItem(this.toKey(id), `${Math.max(quantity, 0)}`);
    } finally {
      this._cart.next(0);
    }
  }

  private toKey(id: string): string {
    return `cart_${id}`;
  }

  getProductQuantity(id: string): number {
    return Number.parseFloat(this.storage.getItem(this.toKey(id)) || '0');
  }

  subscribe(): Observable<Cart> {
    return this._cart.asObservable()
      .pipe(
        map(_ => this.getAll())
      );
  }

  private getAll(): Cart {
    return Object.keys(this.storage)
      .filter(key => key.match(/cart_(.*)/))
      .map(key => key.replace(/cart_(.*)/, '$1'))
      .reduce((result, id) => {
        const quantity = this.getProductQuantity(id);
        if (quantity) {
          result[id] = quantity;
        }
        return result;
      }, {});
  }
}
