{\rtf1\ansi\ansicpg1252\cocoartf1561\cocoasubrtf600
{\fonttbl\f0\fnil\fcharset0 Monaco;}
{\colortbl;\red255\green255\blue255;\red26\green125\blue169;\red252\green252\blue252;\red0\green0\blue0;
\red41\green142\blue11;\red77\green80\blue81;\red148\green108\blue71;\red255\green255\blue255;\red232\green135\blue8;
\red187\green24\blue34;}
{\*\expandedcolortbl;;\cssrgb\c9804\c56471\c72157;\cssrgb\c99216\c99216\c99216;\cssrgb\c0\c0\c0;
\cssrgb\c18431\c61176\c3922;\cssrgb\c37255\c38824\c39216;\cssrgb\c65098\c49804\c34902;\cssrgb\c100000\c100000\c100000\c49804;\cssrgb\c93333\c60000\c0;
\cssrgb\c78824\c17255\c17255;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs32 \cf2 \cb3 \expnd0\expndtw0\kerning0
function\cf0  \cf5 ValidateEmail\cf6 (\cf0 inputText\cf6 )\cf0 \
\cf6 \{\cf0 \
\cf2 var\cf0  mailformat \cf7 \cb8 =\cf0 \cb3  \cf9 /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w\{2,3\})+$/\cf6 ;\cf0 \
\cf2 if\cf6 (\cf0 inputText\cf6 .\cf0 value\cf6 .\cf5 match\cf6 (\cf0 mailformat\cf6 ))\cf0 \
\cf6 \{\cf0 \
document\cf6 .\cf0 form1\cf6 .\cf0 text1\cf6 .\cf5 focus\cf6 ();\cf0 \
\cf2 return\cf0  \cf10 true\cf6 ;\cf0 \
\cf6 \}\cf0 \
\cf2 else\cf0 \
\cf6 \{\cf0 \
\cf5 alert\cf6 (\cf5 "You have entered an invalid email address!"\cf6 );\cf0 \
document\cf6 .\cf0 form1\cf6 .\cf0 text1\cf6 .\cf5 focus\cf6 ();\cf0 \
\cf2 return\cf0  \cf10 false\cf6 ;\cf0 \
\cf6 \}\cf0 \
\cf6 \}}