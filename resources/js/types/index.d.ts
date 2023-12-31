export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
}

export interface Celebrity {
    id: number;
    firstname: string;
    lastname: string;
    image: string;
    description: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};
