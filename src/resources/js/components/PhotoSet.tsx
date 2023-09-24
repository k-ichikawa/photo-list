import React from 'react';
import { PhotoSetType } from '../types/photoList';

export function PhotoSet(props: { photoSet: PhotoSetType }): React.ReactElement {
  return (
        <a href='#' className='photoSet'>
          <div className='photoSetContent'>
            <img src={ props.photoSet.photoSeriesImageUrl }></img>
            <div>
              <span>{ props.photoSet.photoSeriesName }</span>
              <span>{ props.photoSet.memberName }</span>
            </div>
          </div>
        </a>
  );
}