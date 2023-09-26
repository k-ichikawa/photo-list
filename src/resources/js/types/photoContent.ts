export class PhotoContent {
    constructor(
        readonly photoId: number, 
        readonly imageUrl: string,
        readonly pose: string,
        readonly hasPhoto: boolean,
        readonly memberName: string,
    ){}
}

export type PhotoSetDetail = {
    memberName: string;
    photoSeriesName: string;
    photoContents: PhotoContent[];
}