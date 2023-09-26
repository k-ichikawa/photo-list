import React from 'react';
import { PhotoContent } from '../types/photoContent';

export function Photo(
  props: { photoContent: PhotoContent }
): React.ReactElement {
  return (
    <>
        <div>
            <img src={ props.photoContent.imageUrl }></img>
            <span>{ props.photoContent.pose }</span>
            <span>{ props.photoContent.hasPhoto ? '所持済' : '未所持' }</span>
        </div>
    </>
  );
}