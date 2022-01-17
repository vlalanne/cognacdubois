export enum MedalSource {
  CGA = 'CGA',
  SAVEURS_REGIONALLES = 'SAVEURS_REGIONALLES',
  SAVEURS_REGIONALLES_NOUVELLE_AQUITAINE = 'SAVEURS_REGIONALLES_NOUVELLE_AQUITAINE',
  SAVEURS_REGIONALLES_2020 = 'SAVEURS_REGIONALLES_2020'
}

export enum MedalType {
  GOLD = 'GOLD',
  SILVER = 'SILVER',
  BRONZE = 'BRONZE',
}
export interface Medal {
  readonly type: MedalType;
  readonly source: MedalSource;
  readonly year: number;
}
export interface Product {
  readonly id: string;
  readonly name: string;
  readonly description: string;
  readonly price: number;
  readonly aging: number;
  readonly minimumAging: boolean;
  readonly volume_cl: number;
  readonly medals: Medal[];
}

export interface Cart { [id: string]: number; }

export interface Topic {
  readonly id: string;
  readonly name: string;
  readonly description: string;
}
