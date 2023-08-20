import React from 'react';

export function PhotoItem(props: { thumbnail: string; title: string }): React.ReactElement {
  return (
        <a href='#' className='photoItem'>
          <div className='photoItemContent'>
            <img src={ props.thumbnail }></img>
            <span>{ props.title }</span>
          </div>
        </a>
  );
}