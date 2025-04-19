import { Component } from '@angular/core';

const KEY = 'hide_disclaimer';

@Component({
  standalone: false,
  selector: 'app-disclaimer',
  templateUrl: './disclaimer.component.html',
  styleUrls: ['./disclaimer.component.css']
})
export class DisclaimerComponent {


  get hidden(): boolean {
    return sessionStorage.getItem(KEY) === 'true';
  }

  set hidden(hidden: boolean) {
    sessionStorage.setItem(KEY, `${hidden}`);
  }

  constructor() { }

  hide(): void {
    this.hidden = true;
  }

}
