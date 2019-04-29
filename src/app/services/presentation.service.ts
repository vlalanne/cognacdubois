import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Topic } from '../model';

@Injectable({
  providedIn: 'root'
})
export class PresentationService {

  constructor(private http: HttpClient) { }

  getPresentation(): Observable<Topic[]> {
    return this.http.get('assets/data/presentation.json') as Observable<Topic[]>;
  }
}
