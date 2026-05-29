#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string faces;
    cin >> faces; cin.ignore();
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < 5; i++) {
        string image;
        getline(cin, image);
    }
    int w;
    int h;
    cin >> w >> h; cin.ignore();
    for (int i = 0; i < h; i++) {
        string die;
        getline(cin, die);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "die templates!" << endl;
}