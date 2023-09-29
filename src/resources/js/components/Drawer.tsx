/** @jsxImportSource @emotion/react */
import { css } from '@emotion/react';
import clsx from 'clsx';
import { FC, useCallback, useEffect } from 'react'
import { PhotoSetDetail } from '@/js/types/photoContent';
import { PhotoSetDetailComponent } from '@/js/components/PhotoSetDetailComponent';

type Props = {
  isOpen: boolean;
  photoSetDetail: PhotoSetDetail | undefined
  onClose: () => void;
};

export const Drawer: FC<Props> = ({ isOpen, photoSetDetail, onClose }) => {
  const handleKeyDownEscKey = useCallback(
    (e: KeyboardEvent) => {
      if (e.key === 'Escape') {
        onClose();
      }
    },
    [onClose]
  );

  useEffect(() => {
    document.addEventListener('keydown', handleKeyDownEscKey);
    return () => {
      document.removeEventListener('keydown', handleKeyDownEscKey);
    };
  }, [handleKeyDownEscKey]);

  return (
    <>
      <div
        aria-hidden
        className={clsx(isOpen && 'is-visible')}
        onClick={onClose}
        css={overlayStyle}
      />
      <div
        className={clsx(isOpen && 'is-open')}
        css={drawerStyle}
        role="dialog"
        aria-hidden={!isOpen}
      >
        <PhotoSetDetailComponent photoSetDetail={photoSetDetail}></PhotoSetDetailComponent>
      </div>
    </>
  );
};

const overlayStyle = css({
  position: 'fixed',
  inset: 0,
  opacity: 0,
  width: '100%',
  height: '100%',
  overflow: 'hidden',
  pointerEvents: 'none',
  zIndex: 100,
  overscrollBehaviorY: 'contain',
  backgroundColor: 'rgb(0 0 0 / 0.5)',
  transition: 'opacity 0.2s ease-in-out',

  '&.is-visible': {
    opacity: 1,
    pointerEvents: 'auto',
  },
});

const drawerStyle = css({
  position: 'fixed',
  top: 0,
  right: 0,
  bottom: 0,
  width: '50%',
  height: '100%',
  overflowY: 'auto',
  pointerEvents: 'none',
  backgroundColor: '#fff',
  zIndex: 101,
  transform: 'translateX(100%)',
  transition: 'transform 0.2s ease-in-out',

  '&.is-open': {
    pointerEvents: 'auto',
    transform: 'translateX(0)',
  },
});