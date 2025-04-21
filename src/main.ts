import { bootstrapApplication } from '@angular/platform-browser';

import { CognacDuboisComponent } from './app/components/cognacdubois/cognacdubois.component';
import { appConfig } from './app/cognacdubois.config';

bootstrapApplication(CognacDuboisComponent, appConfig)
  .catch(err => console.error(err));
