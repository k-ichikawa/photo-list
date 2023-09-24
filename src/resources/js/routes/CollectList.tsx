import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { PhotoSetList } from '@/js/components/PhotoSetList';

const CollectList = () => {
    const [photoSetList, setPhotoSetList] = useState([]);

    useEffect(() => {
        const getResponse = async () => {
            const response = await axios.get('api/collect-list');

            setPhotoSetList(response.data.photoSetList);
        }
        getResponse();
    }, []);

    return (
        <>
            <PhotoSetList
                h1Text={'collect list'}
                photoSetList={photoSetList}
            />
        </>
    );
}

export default CollectList;