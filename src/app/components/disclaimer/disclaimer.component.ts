import { Component } from '@angular/core';
import { NgClass } from '@angular/common';

const KEY = 'hide_disclaimer';

@Component({
    selector: 'app-disclaimer',
    templateUrl: './disclaimer.component.html',
    styleUrls: ['./disclaimer.component.css'],
    imports: [NgClass]
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
