import axios from 'axios';
import React, { useEffect, useState } from 'react'
import { PhotoContent, PhotoSetDetail } from '../types/photoContent';
import { Photo } from './Photo';

const Drawer = () => {
  const [photoSetDetail, setPhotoSetDetail] = useState<PhotoSetDetail>();

  useEffect(() => {
      const getResponse = async () => {
          const response = await axios.post('api/photo-set-detail', {
            collectListId: 1
          });
          const result = response.data as PhotoSetDetail;

          setPhotoSetDetail(result);
      }
      getResponse();
  }, []);

  return (
    <>
        <div id="drawer-content">
            { photoSetDetail?.memberName }
            {
              photoSetDetail ? photoSetDetail.photoContents.map((photoContent: PhotoContent) => 
                <Photo photoContent={photoContent} key={photoContent.photoId}></Photo>
              ) : ''
            }
        </div>
    </>
  );
}

export default Drawer;