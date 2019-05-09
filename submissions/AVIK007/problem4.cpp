#include<stdio.h>
#include<stdlib.h>
#include<string.h>
int main()
{
	char s[10],a[10];
	int b;
	gets(s);
	int size=strlen(s);
	for(int i=0;i<size;i++)
	{
		b=(int)s[i];
		b=b+1;
		a[i]=(char)b;
	}
	puts(a);
}