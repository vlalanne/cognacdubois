import { Component, OnInit } from '@angular/core';

const KEY = 'hide_disclaimer';

@Component({
  selector: 'app-disclaimer',
  templateUrl: './disclaimer.component.html',
  styleUrls: ['./disclaimer.component.css']
})
export class DisclaimerComponent implements OnInit {


  get hidden(): boolean {
    return sessionStorage.getItem(KEY) === 'true';
  }

  set hidden(hidden: boolean) {
    sessionStorage.setItem(KEY, `${hidden}`);
  }

  constructor() { }

  ngOnInit() {
  }

  hide(): void {
    this.hidden = true;
  }

}
