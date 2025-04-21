import {
  ApplicationConfig,
  importProvidersFrom,
  provideZoneChangeDetection
} from '@angular/core';
import { provideRouter } from '@angular/router';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule, registerLocaleData } from '@angular/common';
import { FormsModule } from '@angular/forms';
import {
  CartService,
  OrderService,
  PresentationService,
  ProductService,
} from './services';
import { provideHttpClient } from '@angular/common/http';
import localeFr from '@angular/common/locales/fr';

import { routes } from './cognacdubois.routes';

registerLocaleData(localeFr, 'fr');

export const appConfig: ApplicationConfig = {
  providers: [
    CartService,
    importProvidersFrom(BrowserModule, CommonModule, FormsModule),
    OrderService,
    PresentationService,
    ProductService,
    provideHttpClient(),
    provideRouter(routes),
    provideZoneChangeDetection({ eventCoalescing: true }),
  ],
};
