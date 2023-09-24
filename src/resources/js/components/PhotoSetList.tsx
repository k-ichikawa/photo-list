import React from 'react';
import { PhotoSet } from '@/js/components/PhotoSet';
import { PhotoSetType } from '@/js/types/photoList';

export function PhotoSetList(
  props: { h1Text: string; photoSetList: PhotoSetType[] }
): React.ReactElement {
  return (
    <section>
      <h1>{props.h1Text}</h1>
      <div className='photoSetList'>
        {props.photoSetList.map((photoSet: PhotoSetType) => 
          <PhotoSet photoSet={photoSet} key={photoSet.collectListId} />
        )}
      </div>
    </section>
  );
}