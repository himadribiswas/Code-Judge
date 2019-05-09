#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<ctype.h>
main()
{
	char s[50],s1[50],s2[50];
	int i,j,k,l;
	gets(s);
	l=strlen(s);
	s1[0]=s[0];
	for(i=1;i<l;i++)
	{
		s1[i]=char(int(s[i])-32);	
	}
	s1[i]='\0';
	for(i=0;i<l;i++)
	{
		if(s[i]=='A' || s[i]=='E' || s[i]=='I' || s[i]=='O'|| s[i]=='U')
		{
			s2[0]=s1[i];
			break;
		}
	}
	for(i=1;i<l;i++)
	{
		s2[i]=s1[i];
	}
	s2[i]=s1[0];
	s2[i+1]='A';
	s2[i+2]='Y';
	s2[i+3]='\0';
	puts(s2);
}