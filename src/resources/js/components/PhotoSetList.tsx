import React from 'react';
import { PhotoSet } from '@/js/components/PhotoSet';
import { useDrawer } from '@/js/hooks/useDrawer';
import { PhotoSetType } from '@/js/types/photoList';
import { Drawer } from '@/js/components/Drawer';

export function PhotoSetList(
  props: { h1Text: string; photoSetList: PhotoSetType[] }
): React.ReactElement {
  const { isOpen, photoSetDetail, onOpenDrawer, onCloseDrawer } = useDrawer();
  return (
    <>
      <section>
        <Drawer isOpen={isOpen} photoSetDetail={photoSetDetail} onClose={onCloseDrawer}></Drawer>
        <h1>{props.h1Text}</h1>
        <div className='photoSetList'>
          {props.photoSetList.map((photoSet: PhotoSetType) => 
            <PhotoSet photoSet={photoSet} onClick={() => onOpenDrawer(photoSet.collectListId)} key={photoSet.collectListId} />
          )}
        </div>
      </section>
    </>
  );
}