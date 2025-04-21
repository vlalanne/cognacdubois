import { Component, Input } from '@angular/core';
import { Medal, MedalSource, MedalType } from '../../model';

@Component({
    selector: 'app-medal',
    templateUrl: './medal.component.html',
    styleUrls: ['./medal.component.css']
})
export class MedalComponent {

  @Input()
  medal!: Medal;

  get longName(): string {

    if (this.medal.source == MedalSource.GUIDE_HACHETTE_DES_VINS) {
      return `Référencé dans le ${this.contestName} ${this.medal.year}${this.typeName}`;
    } else {
      return `Médaille ${this.typeName} du ${this.contestName} ${this.medal.year}`;
    }
  }
  get contestName(): string {
    switch (this.medal.source) {
      case MedalSource.CGA:
        return 'Concours Général Agricole';
      case MedalSource.SAVEURS_REGIONALLES:
      case MedalSource.SAVEURS_REGIONALLES_2020:
      case MedalSource.SAVEURS_REGIONALLES_NOUVELLE_AQUITAINE:
        return 'Concours des Saveurs Régionales';
      case MedalSource.GUIDE_HACHETTE_DES_VINS:
        return 'Guide Hachette des Vins'
    }
  }

  get typeName(): string {
    switch (this.medal.type) {
      case MedalType.GOLD:
        return 'd\'Or';
      case MedalType.SILVER:
        return 'd\'Argent';
      case MedalType.BRONZE:
        return 'de Bronze';
      case MedalType.REFERENCE:
        return '';
      case MedalType.HEART_2_STARS:
        return ' - 2 Etoiles, Coup de Coeur'
    }
  }

  constructor() { }
}
