import React from 'react';

export function List(props: { h1Text: React.ReactNode; }): React.ReactElement {
  return (
    <section>
      <h1>{props.h1Text}</h1>
      <div className='photoItemList'>
        <a href='#' className='photoItem'>
          <div className='photoItemContent'>
            <img src='/image/sample.jpg'></img>
            <span>「One choice」MV衣装</span>
          </div>
        </a>
        <a href='#' className='photoItem'>
          <div className='photoItemContent'>
            <img src='/image/sample.jpg'></img>
            <span>「シーラカンス」MV衣装</span>
          </div>
        </a>
        <a href='#' className='photoItem'>
          <div className='photoItemContent'>
            <img src='/image/sample.jpg'></img>
            <span>「One choice」MV衣装2</span>
          </div>
        </a>
        <a href='#' className='photoItem'>
          <div className='photoItemContent'>
            <img src='/image/sample.jpg'></img>
            <span>「シーラカンス」MV衣装2</span>
          </div>
        </a>
      </div>
    </section>
  );
}