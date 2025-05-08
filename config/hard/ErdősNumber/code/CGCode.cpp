#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string scientist;
    getline(cin, scientist);
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string title;
        getline(cin, title);
    }
    for (int i = 0; i < n; i++) {
        string authors;
        getline(cin, authors);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}