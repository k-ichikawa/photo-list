import { useCallback, useState } from 'react';
import { PhotoSetDetail } from '../types/photoContent';
import axios from 'axios';

export const useDrawer = () => {
  const [isOpen, setIsOpen] = useState(false);
  const [photoSetDetail, setPhotoSetDetail] = useState<PhotoSetDetail>();

  const onOpenDrawer = useCallback((collectId: number) => {
    setIsOpen(true);
    document.body.classList.add('is-disabled-scroll');

    const getResponse = async () => {
        const response = await axios.post('api/photo-set-detail', {
          collectListId: collectId
        });
        const result = response.data as PhotoSetDetail;
  
        setPhotoSetDetail(result);
      }
      getResponse();
  }, [setIsOpen, setPhotoSetDetail]);

  const onCloseDrawer = useCallback(() => {
    setIsOpen(false);
    document.body.classList.remove('is-disabled-scroll');
  }, [setIsOpen]);

  return { isOpen, photoSetDetail, onOpenDrawer, onCloseDrawer };
};