import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { List } from '@/js/components/List';

const CollectList = () => {
    const [photos, setPhotos] = useState([]);

    useEffect(() => {
        const getResponse = async () => {
            const response = await axios.get('api/collect-list');

            setPhotos(response.data);
        }
        getResponse();
    }, []);

    return (
        <>
            <List
                h1Text={'want list'}
                photos={photos}
            />
        </>
    );
}

export default CollectList;