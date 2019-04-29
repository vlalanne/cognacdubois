import { Component, OnInit, Input } from '@angular/core';
import { Medal, MedalSource, MedalType } from '../../model';

@Component({
  selector: 'app-medal',
  templateUrl: './medal.component.html',
  styleUrls: ['./medal.component.css']
})
export class MedalComponent implements OnInit {

  @Input()
  medal: Medal;

  get longName(): string {
    return `Médaille ${this.typeName} du ${this.contestName} ${this.medal.year}`
  }
  get contestName(): string {
    switch (this.medal.source) {
      case MedalSource.CGA:
        return "Concours Général Agricole";
      case MedalSource.SAVEURS_REGIONALLES:
      case MedalSource.SAVEURS_REGIONALLES_NOUVELLE_AQUITAINE:
        return "Concours des Saveurs Régionales";
    }
  }

  get typeName(): string {
    switch (this.medal.type) {
      case MedalType.GOLD:
        return "d'Or";
      case MedalType.SILVER:
      return "d'Argent";
      case MedalType.BRONZE:
        return "de Bronze";
    }
  }

  constructor() { }

  ngOnInit() {
  }

}
