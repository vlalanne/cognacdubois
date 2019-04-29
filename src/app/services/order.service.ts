import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class OrderService {

  constructor(private http: HttpClient) {
  }

  order(order: any): Observable<any> {
    return this.http.post(`${document.getElementsByTagName('base')[0].href}/php/send_mail.php`, order);
  }
}
