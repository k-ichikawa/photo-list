import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { PhotoSetList } from '@/js/components/PhotoSetList';

const WantList = () => {
    const [photoSetList, setPhotoSetList] = useState([]);

    useEffect(() => {
        const getResponse = async () => {
            const response = await axios.get('api/want-list');

            setPhotoSetList(response.data.photoSetList);
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