PGDMP  ,                    |            coachme    16.3    16.3 -               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16708    coachme    DATABASE     �   CREATE DATABASE coachme WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Philippines.1252';
    DROP DATABASE coachme;
                postgres    false            �            1259    16745    bookings    TABLE     �   CREATE TABLE public.bookings (
    id integer NOT NULL,
    instructor_id integer NOT NULL,
    consumer_id integer NOT NULL,
    date date NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
    DROP TABLE public.bookings;
       public         heap    postgres    false            �            1259    16744    bookings_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bookings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.bookings_id_seq;
       public          postgres    false    222                       0    0    bookings_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.bookings_id_seq OWNED BY public.bookings.id;
          public          postgres    false    221            �            1259    16733 	   consumers    TABLE     Y   CREATE TABLE public.consumers (
    id integer NOT NULL,
    user_id integer NOT NULL
);
    DROP TABLE public.consumers;
       public         heap    postgres    false            �            1259    16732    consumers_id_seq    SEQUENCE     �   CREATE SEQUENCE public.consumers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.consumers_id_seq;
       public          postgres    false    220                       0    0    consumers_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.consumers_id_seq OWNED BY public.consumers.id;
          public          postgres    false    219            �            1259    16763    feedback    TABLE       CREATE TABLE public.feedback (
    id integer NOT NULL,
    booking_id integer NOT NULL,
    rating integer,
    comment text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT feedback_rating_check CHECK (((rating >= 1) AND (rating <= 5)))
);
    DROP TABLE public.feedback;
       public         heap    postgres    false            �            1259    16762    feedback_id_seq    SEQUENCE     �   CREATE SEQUENCE public.feedback_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.feedback_id_seq;
       public          postgres    false    224                        0    0    feedback_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.feedback_id_seq OWNED BY public.feedback.id;
          public          postgres    false    223            �            1259    16721    instructors    TABLE     �   CREATE TABLE public.instructors (
    id integer NOT NULL,
    user_id integer NOT NULL,
    specialization character varying(100),
    available_from time without time zone,
    available_to time without time zone
);
    DROP TABLE public.instructors;
       public         heap    postgres    false            �            1259    16720    instructors_id_seq    SEQUENCE     �   CREATE SEQUENCE public.instructors_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.instructors_id_seq;
       public          postgres    false    218            !           0    0    instructors_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.instructors_id_seq OWNED BY public.instructors.id;
          public          postgres    false    217            �            1259    16710    users    TABLE     �  CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(255) NOT NULL,
    user_type character varying(10),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT users_user_type_check CHECK (((user_type)::text = ANY ((ARRAY['consumer'::character varying, 'instructor'::character varying])::text[])))
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16709    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    216            "           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    215            h           2604    16748    bookings id    DEFAULT     j   ALTER TABLE ONLY public.bookings ALTER COLUMN id SET DEFAULT nextval('public.bookings_id_seq'::regclass);
 :   ALTER TABLE public.bookings ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    222    222            g           2604    16736    consumers id    DEFAULT     l   ALTER TABLE ONLY public.consumers ALTER COLUMN id SET DEFAULT nextval('public.consumers_id_seq'::regclass);
 ;   ALTER TABLE public.consumers ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            j           2604    16766    feedback id    DEFAULT     j   ALTER TABLE ONLY public.feedback ALTER COLUMN id SET DEFAULT nextval('public.feedback_id_seq'::regclass);
 :   ALTER TABLE public.feedback ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    223    224            f           2604    16724    instructors id    DEFAULT     p   ALTER TABLE ONLY public.instructors ALTER COLUMN id SET DEFAULT nextval('public.instructors_id_seq'::regclass);
 =   ALTER TABLE public.instructors ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            d           2604    16713    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216                      0    16745    bookings 
   TABLE DATA           T   COPY public.bookings (id, instructor_id, consumer_id, date, created_at) FROM stdin;
    public          postgres    false    222   �3                 0    16733 	   consumers 
   TABLE DATA           0   COPY public.consumers (id, user_id) FROM stdin;
    public          postgres    false    220   �3                 0    16763    feedback 
   TABLE DATA           O   COPY public.feedback (id, booking_id, rating, comment, created_at) FROM stdin;
    public          postgres    false    224   4                 0    16721    instructors 
   TABLE DATA           `   COPY public.instructors (id, user_id, specialization, available_from, available_to) FROM stdin;
    public          postgres    false    218    4                 0    16710    users 
   TABLE DATA           Q   COPY public.users (id, name, email, password, user_type, created_at) FROM stdin;
    public          postgres    false    216   =4       #           0    0    bookings_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.bookings_id_seq', 1, false);
          public          postgres    false    221            $           0    0    consumers_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.consumers_id_seq', 1, false);
          public          postgres    false    219            %           0    0    feedback_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.feedback_id_seq', 1, false);
          public          postgres    false    223            &           0    0    instructors_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.instructors_id_seq', 1, false);
          public          postgres    false    217            '           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    215            w           2606    16751    bookings bookings_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.bookings
    ADD CONSTRAINT bookings_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.bookings DROP CONSTRAINT bookings_pkey;
       public            postgres    false    222            u           2606    16738    consumers consumers_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.consumers DROP CONSTRAINT consumers_pkey;
       public            postgres    false    220            y           2606    16772    feedback feedback_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.feedback DROP CONSTRAINT feedback_pkey;
       public            postgres    false    224            s           2606    16726    instructors instructors_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.instructors
    ADD CONSTRAINT instructors_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.instructors DROP CONSTRAINT instructors_pkey;
       public            postgres    false    218            o           2606    16719    users users_email_key 
   CONSTRAINT     Q   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_key UNIQUE (email);
 ?   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_key;
       public            postgres    false    216            q           2606    16717    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    216            |           2606    16757 "   bookings bookings_consumer_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.bookings
    ADD CONSTRAINT bookings_consumer_id_fkey FOREIGN KEY (consumer_id) REFERENCES public.consumers(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.bookings DROP CONSTRAINT bookings_consumer_id_fkey;
       public          postgres    false    222    4725    220            }           2606    16752 $   bookings bookings_instructor_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.bookings
    ADD CONSTRAINT bookings_instructor_id_fkey FOREIGN KEY (instructor_id) REFERENCES public.instructors(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.bookings DROP CONSTRAINT bookings_instructor_id_fkey;
       public          postgres    false    218    4723    222            {           2606    16739     consumers consumers_user_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.consumers DROP CONSTRAINT consumers_user_id_fkey;
       public          postgres    false    216    220    4721            ~           2606    16773 !   feedback feedback_booking_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_booking_id_fkey FOREIGN KEY (booking_id) REFERENCES public.bookings(id) ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.feedback DROP CONSTRAINT feedback_booking_id_fkey;
       public          postgres    false    4727    224    222            z           2606    16727 $   instructors instructors_user_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.instructors
    ADD CONSTRAINT instructors_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.instructors DROP CONSTRAINT instructors_user_id_fkey;
       public          postgres    false    216    4721    218                  x������ � �            x������ � �            x������ � �            x������ � �            x������ � �     