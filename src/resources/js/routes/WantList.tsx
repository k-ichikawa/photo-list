import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { List } from '@/js/components/List';

const WantList = () => {
    const [photos, setPhotos] = useState([]);

    useEffect(() => {
        const getResponse = async () => {
            const response = await axios.get('api/want-list');

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

export default WantList;