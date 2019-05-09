#include<stdio.h>
int main()

{
	int i,n;
char c[100],d[100];
gets(c);
for(n=0;c[n]!='\0';n++);
for(i=0;i<n;i++)
{
	d[i]=char(int(c[i])+1);
}
for(i=0;i<n;i++)
{
	printf("%c",d[i]);
}
}	
