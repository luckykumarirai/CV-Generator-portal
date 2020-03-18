--
-- PostgreSQL database dump
--

-- Dumped from database version 10.10 (Ubuntu 10.10-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.10 (Ubuntu 10.10-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: education; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.education (
    cname character varying(100),
    cdegree character varying(100),
    cmarks integer,
    branch character varying(100),
    sname1 character varying(100),
    marks1 integer,
    sname2 character varying(100),
    marks2 integer,
    username character varying(100),
    board_name2 character varying(100),
    board_name1 character varying(100)
);


ALTER TABLE public.education OWNER TO postgres;

--
-- Name: image; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.image (
    image bytea
);


ALTER TABLE public.image OWNER TO postgres;

--
-- Name: pers_info; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pers_info (
    linkedln character varying(100),
    github character varying(100),
    bg character varying(10),
    pincode integer,
    district character varying(100),
    state character varying(100),
    username character varying(100)
);


ALTER TABLE public.pers_info OWNER TO postgres;

--
-- Name: project; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.project (
    p_name1 character varying(100),
    s_datep1 character varying(50),
    l_datep1 character varying(50),
    p_about1 character varying(500),
    p_name2 character varying(100),
    s_datep2 character varying(50),
    l_datep2 character varying(50),
    p_about2 character varying(500),
    username character varying(100)
);


ALTER TABLE public.project OWNER TO postgres;

--
-- Name: signup; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.signup (
    username character varying(100) NOT NULL,
    password character varying(100),
    fname character varying(100),
    lname character varying(100),
    contact integer,
    gn character varying(10),
    email character varying(100)
);


ALTER TABLE public.signup OWNER TO postgres;

--
-- Name: skills; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.skills (
    skill character varying(1000),
    username character varying(100)
);


ALTER TABLE public.skills OWNER TO postgres;

--
-- Name: work_exp; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.work_exp (
    w_title1 character varying(100),
    w_name1 character varying(100),
    s_date1 character varying(50),
    l_date1 character varying(50),
    w_about1 character varying(500),
    w_title2 character varying(100),
    w_name2 character varying(100),
    s_date2 character varying(50),
    l_date2 character varying(50),
    w_about2 character varying(500),
    username character varying(100)
);


ALTER TABLE public.work_exp OWNER TO postgres;

--
-- Data for Name: education; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.education (cname, cdegree, cmarks, branch, sname1, marks1, sname2, marks2, username, board_name2, board_name1) FROM stdin;
iiit manipur	b.tech	8	cse	jnv	98	jnv	90	sonam1400	cbse	cbse
iiit manipur,imphal	b.tech	8	cse	jawahar navodya vidyalaya	90	jnv	90	luckyrai	cbse	cbse
iiit manipur	b.tech	7	ece	jesus  & mary	90	jesus & mary	78	kaaya	cbse	cbse
\.


--
-- Data for Name: image; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.image (image) FROM stdin;
\N
\\x
\\x
\\x20646f776e6c6f61642e706e67
\\x2053637265656e73686f742066726f6d20323032302d30332d31302032322d35352d33352e706e67
\.


--
-- Data for Name: pers_info; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pers_info (linkedln, github, bg, pincode, district, state, username) FROM stdin;
https://sonam.com	https://p.github	AB-	802128	buxar	bihar	sonam1400
www.linkedin.com/in/lucky-kumari-b098161a0	https://lucky.github.com	A+	802128	buxar	bihar	luckyrai
https://lucky.com	https://l.github	A+	79002	buxar	rajsthan	kaaya
\.


--
-- Data for Name: project; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.project (p_name1, s_datep1, l_datep1, p_about1, p_name2, s_datep2, l_datep2, p_about2, username) FROM stdin;
translator	0032-03-21	0013-02-23	django work	highlighter	0032-03-21	0231-01-23	php work	sonam1400
translator	2020-01-01	2020-04-05	django work	highlighter	2020-01-01	2020-04-03	php work	luckyrai
translator	1111-11-11	1111-11-11	django work	highlighter	1111-11-11	0022-02-22	gedit tool	kaaya
\.


--
-- Data for Name: signup; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.signup (username, password, fname, lname, contact, gn, email) FROM stdin;
luckyrai	Lucky	lucky	rai	43523626	female	luckykumari1099@gmail.com
pankaj	Pankaj	pankaj	kumar	87595879	male	lucky@iiitmanipur.ac.in
sonam1400	SOnam	sonam	kumari	620116575	female	sohan@123gamil.com
kaaya	1234	kaaya	anand	768954332	female	kanta@iiitmanipur.ac.in
\.


--
-- Data for Name: skills; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.skills (skill, username) FROM stdin;
c,c++,pyhton,java,javascript,django,bootsrap,php,html,css,linux	sonam1400
c,c++,pyhton,java,javascript,django,bootsrap,php,html,css,linux	luckyrai
c,c++,pyhton,java,javascript,django	kaaya
\.


--
-- Data for Name: work_exp; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.work_exp (w_title1, w_name1, s_date1, l_date1, w_about1, w_title2, w_name2, s_date2, l_date2, w_about2, username) FROM stdin;
pyhton development	persuis	0321-03-21	2332-12-31	nice work	php development	abcw	0321-03-21	0012-03-23	well done lucky	sonam1400
pyhton development	persuis	2020-02-02	2020-05-04	django framework for project	php development	Katta	2020-02-02	2020-03-02	php used in backend	luckyrai
pyhton development	persuis	2222-02-12	0022-02-22	nice work	php development	ok	2222-02-12	0111-01-01	well done	kaaya
\.


--
-- Name: signup signup_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.signup
    ADD CONSTRAINT signup_pkey PRIMARY KEY (username);


--
-- Name: education education_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.education
    ADD CONSTRAINT education_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: pers_info pers_info_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pers_info
    ADD CONSTRAINT pers_info_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: project project_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.project
    ADD CONSTRAINT project_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: skills skills_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.skills
    ADD CONSTRAINT skills_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: work_exp work_exp_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.work_exp
    ADD CONSTRAINT work_exp_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- PostgreSQL database dump complete
--

