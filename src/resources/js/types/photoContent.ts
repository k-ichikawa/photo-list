export const CLOSE = 1;
export const MEDIUM = 2;
export const SIT = 3;
export const PULL = 4;

export type PhotoContent = {
    title: string;
    [CLOSE]: PhotoContentItem;
    [MEDIUM]: PhotoContentItem;
    [SIT]: PhotoContentItem;
    [PULL]: PhotoContentItem;
}

export type PhotoContentItem = {
    imageUrl: string;
    isHaving: boolean
}