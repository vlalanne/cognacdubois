import { Component, OnInit } from '@angular/core';
import { PresentationService } from '../../services';
import { Observable } from 'rxjs';
import { tap } from 'rxjs/operators';
import { Topic } from '../../model';
import { NgFor, NgClass, NgIf, AsyncPipe } from '@angular/common';

@Component({
    selector: 'app-presentation',
    templateUrl: './presentation.component.html',
    styleUrls: ['./presentation.component.css'],
    imports: [NgFor, NgClass, NgIf, AsyncPipe]
})
export class PresentationComponent implements OnInit {

  topics$!: Observable<Topic[]>;
  selectedTopic!: Topic;

  constructor(private presentationService: PresentationService) { }

  ngOnInit(): void {
    this.topics$ = this.presentationService.getPresentation()
      .pipe(tap(topics => this.selectedTopic = topics[0]));
  }

  select(topic: Topic): void {
    this.selectedTopic = topic;
  }

}
