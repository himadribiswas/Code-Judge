#include<stdio.h>
int main()
{
char ch[100],s[100];
int i,x;
scanf("%s",&ch);
x=strlen(ch);
for(i=0;i<x;i++){
s[i]=ch[i];
ch[i]++;
ch[i]=s[i];}
printf("%s",s);
return 0;
}