import { Component } from '@angular/core';
import { DisclaimerComponent } from '../disclaimer/disclaimer.component';
import { HeaderComponent } from '../header/header.component';
import { RouterOutlet } from '@angular/router';
import { CartComponent } from '../cart/cart.component';

@Component({
    selector: 'app-cognacdubois',
    templateUrl: './cognacdubois.component.html',
    styleUrls: ['./cognacdubois.component.css'],
    imports: [DisclaimerComponent, HeaderComponent, RouterOutlet, CartComponent]
})
export class CognacDuboisComponent {
  title = 'cognacdubois';
}
