/** @jsxImportSource @emotion/react */
import { css } from '@emotion/react';
import React from 'react';
import { PhotoContent } from '../types/photoContent';

export function Photo(
  props: { photoContent: PhotoContent }
): React.ReactElement {
  return (
    <>
        <div css={ photoContentStyle }>
            <img src={ props.photoContent.imageUrl } css={ imgStyle }></img>
            <p css={ poseStyle }>{ props.photoContent.pose } { props.photoContent.hasPhoto ? '所持済' : '未所持' }</p>
        </div>
    </>
  );
}

const photoContentStyle = css({
  width: "50%",
});

const imgStyle = css({
  width: "80%",
  height: "80%",
  border: "1px solid #C0C0C0",
});

const poseStyle = css({

});
