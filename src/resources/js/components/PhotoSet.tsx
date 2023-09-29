import React from 'react';
import { PhotoSetType } from '@/js/types/photoList';

export function PhotoSet(props: { photoSet: PhotoSetType, onClick: () => void; }): React.ReactElement {
  return (
        <a href='#' className='photoSet' onClick={props.onClick}>
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