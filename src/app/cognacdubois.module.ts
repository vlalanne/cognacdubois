import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule, registerLocaleData } from '@angular/common';
import { provideHttpClient } from '@angular/common/http';
import localeFr from '@angular/common/locales/fr';

import {
  CartComponent,
  CognacDuboisComponent,
  DisclaimerComponent,
  HeaderComponent,
  MedalComponent,
  ContactComponent,
  ProductsComponent,
  ProductComponent,
  PresentationComponent
} from './components/';
import { CartService, OrderService, PresentationService, ProductService } from './services/';

import { CognacduboisRoutingModule } from './cognacdubois-routing.module';

registerLocaleData(localeFr, 'fr');

@NgModule({
  declarations: [
    CartComponent,
    CognacDuboisComponent,
    ContactComponent,
    DisclaimerComponent,
    HeaderComponent,
    MedalComponent,
    PresentationComponent,
    ProductComponent,
    ProductsComponent
  ],
  imports: [
    BrowserModule,
    CommonModule,
    FormsModule,
    CognacduboisRoutingModule
  ],
  providers: [
    CartService,
    OrderService,
    PresentationService,
    ProductService,
    provideHttpClient()
  ],
  bootstrap: [CognacDuboisComponent]
})
export class CognacduboisModule { }
