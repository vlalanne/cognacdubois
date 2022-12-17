import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';

import { CognacduboisModule } from './app/cognacdubois.module';

platformBrowserDynamic().bootstrapModule(CognacduboisModule)
  .catch(err => console.error(err));
