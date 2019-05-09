import java.io.*;
 class problem2
 {
 int m,n,c=0;
  BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
  public void takeNumbers() throws Exception
  {
//   System.out.println("Enter the value of 'm';");
   m=Integer.parseInt(br.readLine());
//   System.out.println("Enter the value of 'n';");
   n=Integer.parseInt(br.readLine());
   if(m > n)
   {
   System.out.println("Invalid Input.");
   return;
   }
   System.out.println("");
   for(int i=m;i<=n;i++)
   {
   if(nonPrime(i) && magic(i))
   {
   System.out.print(i+ " ");
   c++;
   }
   }
 // System.out.println("\nFrequency of composite magic numbers:"+c);
  }
  private boolean nonPrime (int x)
  {
   int i;
   for(i=2;i < x; i++)
   {
    if(x%i==0)
    break;
    }
    if(i==x)
    return false;
    else
    return true;
    }
    private boolean magic( int x)
    {
     int s=0;
     while(true)
     {
      while(x > 0)
      {
       s=s+x%10;
       x=x/10;
       }
       if(s < 10 )
       break;
       x=s;
       s=0;
       }
       if(s==1)
       return true;
       else
       return false;
       }
  public static void main(String args[])throws Exception
      {
       problem2 ob=new problem2();
       ob.takeNumbers();
       }
       }