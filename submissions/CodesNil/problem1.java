import java.io.*;
class problem1
{
public int fact(int r)
{
int f=1;
for(int i=1;i<=r;i++)
{
f=f*i;
}
return f;
}

public static void main(String args[])throws IOException
{
int sum=0;
int r=0;
problem1 ob=new problem1();
BufferedReader BR=new BufferedReader(new InputStreamReader(System.in));
//System.out.println("Enter a number");
int n=Integer.parseInt(BR.readLine());
int nn=n;
while(nn!=0)
{
r=nn%10;
sum=sum+ob.fact(r);
nn=nn/10;
}
if(sum==n)
System.out.println("Yes");
else
System.out.println("No");
}
}