import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { PhotoSetList } from '@/js/components/PhotoSetList';
import { PhotoSetType } from '../types/photoList';

const WantList = () => {
    const [photoSetList, setPhotoSetList] = useState<PhotoSetType[]>([]);

    useEffect(() => {
        const getResponse = async () => {
            const response = await axios.get('api/want-list');
            const result = response.data.photoSetList as PhotoSetType[];

            setPhotoSetList(result);
        }
        getResponse();
    }, []);

    return (
        <>
            <PhotoSetList
                h1Text={'want list'}
                photoSetList={photoSetList}
            />
        </>
    );
}

export default WantList;