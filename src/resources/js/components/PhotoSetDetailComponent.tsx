/** @jsxImportSource @emotion/react */
import { css } from '@emotion/react';
import React from 'react';
import { PhotoContent, PhotoSetDetail } from '@/js/types/photoContent';
import { Photo } from '@/js/components/Photo';

export function PhotoSetDetailComponent(
  props: { photoSetDetail: PhotoSetDetail |undefined }
): React.ReactElement {
  return (
    props.photoSetDetail ? <>
      <div css={ drawerStyle }>
        <h1 css={ memberNameStyle }>{ props.photoSetDetail.memberName }</h1>
        <h2 css={ photoSeriesNameStyle } >{ props.photoSetDetail.photoSeriesName }</h2>
        <div css={ photoContentParentStyle }>
          {
            props.photoSetDetail.photoContents.map((photoContent: PhotoContent) => 
              <Photo photoContent={photoContent} key={photoContent.photoId}></Photo>
            )
          }
        </div>
      </div>
    </> : <></>
  );
}

const drawerStyle = css({
  marginTop: "24px",
  marginLeft: "24px"
})

const memberNameStyle = css({
  fontSize: "16px",
});

const photoSeriesNameStyle = css({
  fontSize: "16px",
});

const photoContentParentStyle = css({
  display: "flex",
  flexWrap: "wrap",
  marginTop: "24px",
  marginLeft: "24px",
});

