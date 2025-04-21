import { Routes } from '@angular/router';
import { ProductsComponent, ContactComponent, PresentationComponent, CartComponent } from './components';

export const routes: Routes = [
  {
    path: '', redirectTo: '/products', pathMatch: 'full'
  },
  { path: 'products', component: ProductsComponent },
  { path: 'presentation', component: PresentationComponent },
  { path: 'contact', component: ContactComponent },
  { path: 'cart', component: CartComponent },
];
