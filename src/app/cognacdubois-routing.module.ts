import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ProductsComponent, ContactComponent, PresentationComponent } from './components';

const routes: Routes = [
  {
    path: '', redirectTo: '/products', pathMatch: 'full'
  },
  { path: 'products', component: ProductsComponent },
  { path: 'presentation', component: PresentationComponent },
  { path: 'contact', component: ContactComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class CognacduboisRoutingModule { }
