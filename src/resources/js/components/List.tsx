import React from 'react';
import { PhotoItem } from '@/js/components/PhotoItem';
import { PhotoListItem } from '@/js/types/photoList';

export function List(props: { h1Text: string; photos: PhotoListItem[] }): React.ReactElement {
  return (
    <section>
      <h1>{props.h1Text}</h1>
      <div className='photoItemList'>
        {props.photos.map(photo => <PhotoItem thumbnail={photo.thumbnail} title={photo.title} />)}
      </div>
    </section>
  );
}