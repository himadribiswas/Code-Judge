#include<stdio.h>
int main(){
int a[9][9],n,i,j,sl=0,sr=0; 
scanf("%d",&n);
if(n<3||n>9)
printf("SIZE OUT OF RANGE");
else{
for(i=0;i<n;i++) //for rows
{
	{
for(j=0;j<n;j++) //for column
scanf("%d",&a[i][j]);
}
}
for(i=0;i<n;i++) //for rows
{
	{
for(j=0;j<n;j++)
if(i==j){ //for column
sl+=a[i][j];
}
}
}
for(i=0,j=n-1;i<n,j>=0;i++,j--)
sr+=a[i][j];
if(sl>sr)
printf("%d",sl);
else if(sr>sl)
printf("%d",sr);
}
return 0;
}
