import java.io.*;
class problem3
{
public int prime(int r)
{
int l=0;
int g=0;
for(int i=1;i<=r;i++)
{
l=r%i;
if(l==0)
g=g+1;
}
return g;
}
public static void main(String args[])throws IOException
{
int sum=0;
int r=0;
problem3 ob=new problem3();
BufferedReader BR=new BufferedReader(new InputStreamReader(System.in));
int n=Integer.parseInt(BR.readLine());
int nn=n;
while(nn!=0)
{
r=nn%10;
sum=sum*10+r;
nn=nn/10;
}
if(ob.prime(n)==2 && sum==n)
System.out.println("Palprime");
else
System.out.println("Not Palprime");
}
}
